<?php

namespace App;


class Car
{
    public
        $engine,
        $engine_id,
        $model,
        $model_id,
        $year,
        $year_id,
        $mark,
        $mark_id;

    private
        $error = false,
        $error_message = '';

    public function __construct($value)
    {
        if(is_array($value)) {
            $data = $value;
        } else {
            $data = Api::getData([
                'method' => 'getapplicabilityowners', // запрашивает девево родителей начиная от типа переданного id (aplicability_id)
                'applicability_id' => $value // id марки или года или модели или двигателя
            ]);
        }

        if( isset($data['result']) && $data['result'] == 'fail') {
            $this->error = true;
            $this->error_message = $data['message'];
        } else {
            $this->engine = $data['value'];
            $this->engine_id = $data['id'];

            $this->model = $data['owner']['value'];
            $this->model_id = $data['owner']['id'];

            $this->year = $data['owner']['owner']['value'];
            $this->year_id = $data['owner']['owner']['id'];

            $this->mark = $data['owner']['owner']['owner']['value'];
            $this->mark_id = $data['owner']['owner']['owner']['id'];
        }
    }

    public function getName()
    {
        return "{$this->mark} ({$this->year}) {$this->model} {$this->engine}";
    }

    public function isLoaded()
    {
        return ! $this->error;
    }
}
