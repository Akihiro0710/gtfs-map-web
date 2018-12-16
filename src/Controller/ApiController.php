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

    public function stops($trip_id)
    {
        $this->autoRender = false;
        $stopTimes = TableRegistry::getTableLocator()
                ->get('StopTimes')
                ->find()
                ->where(['trip_id' => str_replace(' ', '+', $trip_id)])
                ->sortBy('stop_sequence', SORT_DESC);
        $stops = TableRegistry::getTableLocator()->get('Stops');
        $result = [];
        foreach ($stopTimes as $stopTime) {
            $item = $stops->find()->where(['stop_id' => $stopTime->stop_id])->first()->toArray();
            $item['time'] = $stopTime->arrival_time;
            $result[] = $item;
        }

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
