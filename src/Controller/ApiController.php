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
        $result = TableRegistry::getTableLocator()->get('Stops')->find()->toArray();
        echo json_encode($result);
        $this->set([
                'result' => $result,
                '_serialize' => ['result']
        ]);
    }

    public function shapes($id)
    {
        $this->autoRender = false;
        $result = TableRegistry::getTableLocator()->get('Shapes')->find()->where(['shape_id' => $id])->toArray();
        echo json_encode($result);
        $this->set([
                'result' => $result,
                '_serialize' => ['result']
        ]);
    }
}
