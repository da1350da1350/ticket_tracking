<?php

namespace App\Http\Services;

use App\Models\Repository\TicketRepository;

class TicketService
{
    public $tick_respository;

    public function __construct(TicketRepository $tick_respository)
    {
        $this->tick_respository = $tick_respository;
    }

    public function Create(array $data)
    {
        $this->tick_respository->Insert($data);
    }

    public function UpdateContent(int $id, array $conetent)
    {
        $this->tick_respository->Update($id, $conetent);
    }

    public function Resolve(int $id)
    {
        $this->tick_respository->Update($id, ['status' => 'resolve']);
    }

}
