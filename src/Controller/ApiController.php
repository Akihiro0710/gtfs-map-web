<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
use Cake\View\Exception\MissingTemplateException;

/**
 * Api Controller
 *
 *
 */
class ApiController extends AppController
{
    /**
     * @throws \Exception
     */
    public function initialize()
    {
        parent::initialize();
    }

    public function stops()
    {
        $this->autoRender = false;
        $stops = TableRegistry::getTableLocator()->get('Stops')->find()->toArray();
        $result = $stops;
        $status = !empty($result);
        if (!$status) {
            $error = array(
                    'message' => 'データがありません',
                    'code' => 404
            );
        }
        return json_encode(compact('status', 'result', 'error'));
    }
}
