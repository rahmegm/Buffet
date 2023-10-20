<?php
// app/Database/Query/Grammars/MySqlGrammar.php

namespace App\Database\Query\Grammars;

class MySqlGrammar extends \Illuminate\Database\Query\Grammars\MySqlGrammar
{
    public function getDateFormat()
    {
        return 'd/m/Y H:i:s.u';
    }
}