<?php

namespace HealthGraph\Command;

use Guzzle\Service\Command\AbstractCommand;

class GetUser extends AbstractCommand
{

    protected function build()
    {
        $this->request = $this->client->get('/user');
    }

    public function execute()
    {
        $result = parent::execute();
        $config = $this->client->getConfig();
        foreach ($result as $key => $value) {
            $config->set('hg.' . $key, $value);
        }
        return $result;
    }

}
