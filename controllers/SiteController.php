<?php
namespace app\controllers;

use algorasoft\garden\Application;
use algorasoft\garden\Controller;
use algorasoft\garden\Request;
use algorasoft\garden\Response;
use app\models\ContactForm;

/**
 * Class SiteController
 *
 * @author ROMAN ISRAEL <cto@algorasoft.com>
 * @package app\controllers
 */

class SiteController extends Controller {

    public function home() {
        $params = [
            'name' => 'Daniel Aghedo',
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response) {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact,
        ]);
    }

}