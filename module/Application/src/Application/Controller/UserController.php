<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Service\UserManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function listAction()
    {
        /** @var UserManager $userManager */
        $userManager = $this->getServiceLocator()->get('userManager');
        
        return new ViewModel([
            'users' => $userManager->getList()
        ]);
    }
    
    public function addAction()
    {
        return new ViewModel();
    }
}
