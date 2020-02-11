<?php
use Migrations\AbstractSeed;

/**
 * Cards seed.
 */
class CardsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $table = $this->table('cards');

        $data[] = [
            "id" => "35c7c392-6782-40c8-bb24-6aad24f14660",
            "name" => "Arc Lightning",
            "description" => "Arc Lightning deals 3 damage divided as you choose among one, two, or three targets.",
            "url_image" => "https://img.scryfall.com/cards/normal/front/3/5/35c7c392-6782-40c8-bb24-6aad24f14660.jpg?1562784760",
            "created" => date("Y-m-d H:i:s"),
            "modified" => date("Y-m-d H:i:s"),
            "collection_id" => "a25"

        ];

        $data[] = [
            "id" => "635f581e-3954-4e46-82ff-ca2de3d64af6",
            "name" => "Ball Lightning",
            "description" => "Trample (This creature can deal excess combat damage to the player or planeswalker it's attacking.)\nHaste (This creature can attack and {T} as soon as it comes under your control.)\nAt the beginning of the end step, sacrifice Ball Lightning.",
            "url_image" => "https://img.scryfall.com/cards/normal/front/6/3/635f581e-3954-4e46-82ff-ca2de3d64af6.jpg?1562436132",
            "created" => date("Y-m-d H:i:s"),
            "modified" => date("Y-m-d H:i:s"),
            "collection_id" => "a25"
        ];

        $data[] = [
            "id" => "2509482a-68d8-4e94-9d1e-5b069ebdc2e4",
            "name" => "Barbed Lightning",
            "description" => "Choose one —\n• Barbed Lightning deals 3 damage to target creature.\n• Barbed Lightning deals 3 damage to target player or planeswalker.\nEntwine {2} (Choose both if you pay the entwine cost.)",
            "url_image" => "https://img.scryfall.com/cards/normal/front/3/5/35c7c392-6782-40c8-bb24-6aad24f14660.jpg?1562784760",
            "created" => date("Y-m-d H:i:s"),
            "modified" => date("Y-m-d H:i:s"),
            "collection_id" => "mm2"
        ];


        $table->insert($data)->save();
    }
}
