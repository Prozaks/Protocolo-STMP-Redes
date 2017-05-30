<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email; // <-- Importante para utilizacion de correo electronico

class NotificationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        if ($this->request->is(['patch', 'post', 'put'])) {   
            

            $this->autoRender = false;
        
            /*configuramos las opciones para conectarnos al servidor
              smtp de Gmail
             */
            Email::configTransport('mail', [
              'host' => 'smtp.gmail.com', //servidor smtp con encriptacion ssl
              'port' => 587, //puerto de conexion
              'tls' => true, //true en caso de usar encriptacion tls
              
              //cuenta de correo gmail completa desde donde enviaran el correo
              'username' => 'voluntariosdbd@gmail.com', 
              'password' => '189061021', //contrasena
              
              //Establecemos que vamos a utilizar el envio de correo por smtp
              'className' => 'Smtp', 
              
              //evitar verificacion de certificado ssl ---IMPORTANTE---
              'context' => [
                'ssl' => [
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
                ]
              ]
            ]); 
            /*fin configuracion de smtp*/

            /*enviando el correo*/
            $correo = new Email(); //instancia de correo
            $correo
              ->transport('mail') //nombre del configTrasnport que acabamos de configurar
              ->template('index') //plantilla a utilizar
              ->emailFormat('html') //formato de correo
              ->to('jose.camus@usach.cl') //correo para
              ->from('voluntariosdbd@gmail.com') //correo de
              ->subject('Prueba TDB') //asunto
              ->viewVars([ //enviar variables a la plantilla
                'mensaje1' => $this->request->data['Mensaje1'],                
              ]);
            
            if ($correo->send()) {
                echo "Correo enviado";
            }else{
                echo "Ups error man";
            }
        }
    }
}
