<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{

    protected function _initTranslate(){
        $translateNamespace = new Zend_Session_Namespace('Zend_Translate');
        if(is_null($translateNamespace->locale)){
            $translateNamespace->locale = "en";
        }
        $translate = new Zend_Translate(
            array(
                'adapter' => 'array',
                'content' => APPLICATION_PATH . "/translations/en/",
                'locale'  => 'en'
            )
        );

        $translate->addTranslation(
            array(
                'content' => APPLICATION_PATH . "/translations/de/",
                'locale'  => 'de',
                'clear'   => true
            )
        );
        $translate->setLocale($translateNamespace->locale);
        Zend_Registry::set('Zend_Translate', $translate);
    }

    protected function _initPages(){
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
        $view->setEncoding('UTF-8');
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');

        $view->headScript()->appendFile(
            '/js/jquery-2.1.0.min.js',
            'text/javascript'
        );
        $view->headScript()->appendFile(
            '/js/bootstrap.min.js',
            'text/javascript'
        );
        $view->headLink()->appendStylesheet(
            '/css/bootstrap.min.css'
        );
        // Uncomment the following lines to add the bootstrap 3d style theme
        //$view->headLink()->appendStylesheet(
        //    '/css/bootstrap-theme.min.css'
        //);
        $view->headLink()->appendStylesheet(
            '/css/main.css'
        );
    }
}

