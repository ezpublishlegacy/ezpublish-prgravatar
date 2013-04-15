<?php

/* !
  \class   GravatarOperator - Gravataroperator.php
  \ingroup eZTemplateOperators
  \brief   Handles template operator get_gravatar. By using get_gravatar you can get the gravatar defined by the user.
  \version 1.0
  \date    Friday 12 April 2013 2:21:30 pm
  \author  Pedro Resende <pedroresende@mail.resende.biz>

  Example:
  \code
  {get_gravatar('email','default','size)|wash}
  \endcode
 */

class GravatarOperator {

    function __construct() {
        
    }

    function operatorList() {
        return array('get_gravatar');
    }

    function namedParameterPerOperator() {
        return true;
    }

    function namedParameterList() {
        return array('get_gravatar' => array('email' => array('type' => 'string',
                    'required' => true,
                    'default' => 'default text'),
                'default' => array('type' => 'string',
                    'required' => false,
                    'default' => 'http://www.somewhere.com/homestar.jpg'),
                'size' => array('type' => 'integer',
                    'required' => true,
                    'default' => '40')
            )
        );
    }

    function modify($tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters, $placement) {
        $email = $namedParameters['email'];
        $default = $namedParameters['default'];
        $size = $namedParameters['size'];
        switch ($operatorName) {
            case 'get_gravatar': {
                    if ( emtpy( $default ) ) 
                    {
                        $default = 'http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s='.$size;
                    }
                    $operatorValue = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=" . urlencode($default) . "&s=" . $size;
                } break;
        }
    }

}

?>