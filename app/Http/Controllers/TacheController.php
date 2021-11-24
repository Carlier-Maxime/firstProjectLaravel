<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    private array $taches;

    /**
     * TacheController constructor.
     */
    public function __construct() {
        $this->taches = [Tache::factory()->make(
            ['id' => 1,
                'expiration' => '2020-10-11',
                'categorie' => 'A Faire',
                'description' => 'Commodi voluptatem sunt itaque quia odio non eaque in. In commodi est mollitia incidunt laborum reiciendis qui. Et aut nihil quasi vel tenetur rem ut. Reiciendis est ratione distinctio voluptatem nobis eligendi.',
                'accomplie' => 'N',
                'created_at' => '2020-09-07T13:02:00.000000Z',
                'updated_at' => '2020-10-15T19:20:07.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 2,
                'expiration' => '2020-09-03',
                'categorie' => 'Urgent',
                'description' => 'Sequi fugiat possimus molestiae eveniet libero distinctio. Quis delectus placeat consequatur laborum animi maxime. Assumenda illum sapiente consequatur aut.',
                'accomplie' => 'N',
                'created_at' => '2020-07-05T18:24:09.000000Z',
                'updated_at' => '2020-10-11T13:29:08.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 3,
                'expiration' => '2020-10-10',
                'categorie' => 'A Faire',
                'description' => 'Eos dolor et autem ipsum et quos labore. Est rem est veniam quaerat sed. Sed delectus totam voluptas cupiditate dolorem quo id.',
                'accomplie' => 'N',
                'created_at' => '2020-08-21T15:20:06.000000Z',
                'updated_at' => '2020-09-14T00:23:02.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 4,
                'expiration' => '2020-08-19',
                'categorie' => 'A Faire',
                'description' => 'Corrupti quasi molestiae nemo in tempore omnis cumque. Possimus id at quam ut est et et. Soluta soluta impedit earum occaecati laborum rerum ut. Consequatur sint praesentium quia rerum consectetur molestiae error.',
                'accomplie' => 'N',
                'created_at' => '2020-07-10T23:18:42.000000Z',
                'updated_at' => '2020-10-12T19:48:42.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 5,
                'expiration' => '2020-08-18',
                'categorie' => 'Urgent',
                'description' => 'Est temporibus dolore illo eos qui tempore soluta. Ut illo asperiores libero eos ut earum. Velit veniam dolorem aut ut iusto aliquam non.',
                'accomplie' => 'O',
                'created_at' => '2020-08-02T03:51:23.000000Z',
                'updated_at' => '2020-09-04T10:24:19.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 6,
                'expiration' => '2020-09-04',
                'categorie' => 'A Faire',
                'description' => 'Unde dolorum modi vel qui neque corrupti. Sed est qui voluptate voluptatem ut vero quasi possimus. Aut voluptas itaque quia vel. Sit consequuntur aut suscipit blanditiis enim laudantium accusantium. Tenetur ea et ipsum ut dolor neque.',
                'accomplie' => 'N',
                'created_at' => '2020-07-15T17:06:44.000000Z',
                'updated_at' => '2020-07-25T18:50:29.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 7,
                'expiration' => '2020-08-12',
                'categorie' => 'A Faire',
                'description' => 'Voluptas quisquam et eveniet. Debitis blanditiis ea id et exercitationem voluptas incidunt. Aperiam necessitatibus sequi qui odit. Voluptate sint quia libero et nam molestiae.',
                'accomplie' => 'O',
                'created_at' => '2020-04-28T23:09:56.000000Z',
                'updated_at' => '2020-09-26T16:55:30.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 8,
                'expiration' => '2020-09-25',
                'categorie' => 'A Faire',
                'description' => 'Dolorem qui sit ipsa velit non eum est. Consequatur ipsum earum pariatur quia enim mollitia voluptates. At eos optio et modi.',
                'accomplie' => 'N',
                'created_at' => '2020-09-06T18:25:30.000000Z',
                'updated_at' => '2020-10-15T14:37:21.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 9,
                'expiration' => '2020-10-15',
                'categorie' => 'Optionnel',
                'description' => 'Aut quaerat soluta non culpa porro. Qui facere nobis libero labore ea vel. Adipisci vitae ut libero eum. Accusamus voluptatem maiores tenetur magni.',
                'accomplie' => 'N',
                'created_at' => '2020-09-15T17:08:38.000000Z',
                'updated_at' => '2020-10-12T06:22:22.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 10,
                'expiration' => '2020-09-19',
                'categorie' => 'Optionnel',
                'description' => 'Adipisci amet pariatur omnis unde ut eos. Eum sint amet architecto corporis dignissimos. Autem voluptatum iusto nam natus odio saepe. Dolor sed et voluptatibus tempore sunt nobis est.',
                'accomplie' => 'N',
                'created_at' => '2020-08-01T11:45:17.000000Z',
                'updated_at' => '2020-09-06T15:42:09.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 11,
                'expiration' => '2020-09-26',
                'categorie' => 'Optionnel',
                'description' => 'Dignissimos cupiditate rerum dolor a maiores magnam aut voluptatem. Enim qui maxime enim et quis repellendus quis. Et repudiandae tenetur sint voluptate.',
                'accomplie' => 'O',
                'created_at' => '2020-07-18T17:21:48.000000Z',
                'updated_at' => '2020-08-15T12:49:55.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 12,
                'expiration' => '2020-06-06',
                'categorie' => 'Urgent',
                'description' => 'Impedit quaerat recusandae debitis et cum et dolores. Maiores distinctio est magni laborum.',
                'accomplie' => 'N',
                'created_at' => '2020-06-03T07:52:30.000000Z',
                'updated_at' => '2020-09-02T17:42:38.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 13,
                'expiration' => '2020-10-07',
                'categorie' => 'Urgent',
                'description' => 'Dolorum dolores magni illum. Eum itaque dolorum non beatae ullam iusto. Et et alias quod consequuntur.',
                'accomplie' => 'N',
                'created_at' => '2020-08-02T17:46:50.000000Z',
                'updated_at' => '2020-10-16T22:14:23.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 14,
                'expiration' => '2020-05-21',
                'categorie' => 'Urgent',
                'description' => 'Dolorum alias numquam voluptatem labore. Maiores animi aliquam et ut voluptas quod sed earum. Nam iusto cumque nostrum at consectetur rerum. Molestiae fuga voluptatem id consequatur dicta ipsa.',
                'accomplie' => 'N',
                'created_at' => '2020-05-13T17:19:00.000000Z',
                'updated_at' => '2020-08-08T10:57:05.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 15,
                'expiration' => '2020-05-22',
                'categorie' => 'Optionnel',
                'description' => 'Qui blanditiis dolor excepturi porro alias repellat. Earum rerum non cumque perferendis non omnis culpa. Voluptatum aut non aut voluptatem suscipit soluta consequuntur. Placeat aperiam vel perspiciatis. Quia id et odio sed provident placeat.',
                'accomplie' => 'N',
                'created_at' => '2020-05-14T22:04:49.000000Z',
                'updated_at' => '2020-08-29T16:44:27.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 16,
                'expiration' => '2020-09-09',
                'categorie' => 'Urgent',
                'description' => 'Facilis ut culpa quam voluptas consequatur ducimus est nesciunt. Dicta consequuntur vitae natus accusantium assumenda adipisci. Voluptatem qui sequi dolorem rerum.',
                'accomplie' => 'O',
                'created_at' => '2020-08-27T13:08:13.000000Z',
                'updated_at' => '2020-10-12T08:14:31.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 17,
                'expiration' => '2020-08-16',
                'categorie' => 'Optionnel',
                'description' => 'Unde ut repellat maiores quaerat eaque. Ut libero tenetur est quidem. Quia perferendis aut perspiciatis voluptas aut esse.',
                'accomplie' => 'O',
                'created_at' => '2020-08-14T05:34:19.000000Z',
                'updated_at' => '2020-08-24T23:22:15.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 18,
                'expiration' => '2020-07-19',
                'categorie' => 'A Faire',
                'description' => 'Dolor fugit est cupiditate velit quam. Ipsum vel eligendi deleniti amet ut tenetur quidem. Ea sed eaque quos accusantium illum fugiat. Pariatur fugiat omnis debitis aut sunt.',
                'accomplie' => 'O',
                'created_at' => '2020-07-08T19:28:20.000000Z',
                'updated_at' => '2020-07-16T08:54:50.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 19,
                'expiration' => '2020-10-10',
                'categorie' => 'Urgent',
                'description' => 'Doloremque deserunt odit magnam voluptas est non temporibus quas. Quae voluptatum et earum repudiandae in nam tempore magnam. Aut ipsum excepturi omnis debitis voluptas illo. Alias neque deserunt est et est nam dolorem voluptatibus.',
                'accomplie' => 'O',
                'created_at' => '2020-09-30T14:18:00.000000Z',
                'updated_at' => '2020-10-17T01:34:39.000000Z',
            ]),
            Tache::factory()->make([
                'id' => 20,
                'expiration' => '2020-10-17',
                'categorie' => 'A Faire',
                'description' => 'Officiis non ipsam et voluptas corrupti consequuntur. Molestiae sapiente in at architecto fugit. Qui necessitatibus sunt est illo rerum fugiat molestias. Minima deleniti dolores totam tempore eum quaerat aut.',
                'accomplie' => 'O',
                'created_at' => '2020-10-16T10:00:32.000000Z',
                'updated_at' => '2020-10-17T04:12:48.000000Z',
            ]),
        ];
        //$this->taches = Tache::factory(20)->make();
    }

    public function index(){
        return view('taches.index', ['taches' => $this->taches]);
    }

    public function show($id) {
        $tache = $this->taches[$id - 1];
        return view('taches.show', ['tache' => $tache]);
    }

    public function filtre(Request $request) {
        $cat = $request->get("cat", '');
        $taches = [];
        if (empty($cat)) {
            $taches = $this->taches;
        } else {
            foreach ($this->taches as $tache) {
                if ($tache->categorie == $cat) {
                    $taches[] = $tache;
                }
            }
        }
        return view('taches.index', ['taches' => $taches]);
    }
}
