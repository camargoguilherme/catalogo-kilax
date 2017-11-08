<?php

namespace App;

use App\JsonKilaxJapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Google\Cloud\Storage\StorageClient;

class Produto extends Model
{
    protected $attributes = ['descricao'=>'', 'codbarra'=>'', 'material'=>'', 'medidas'=>'',
                            'origem'=>'', 'peso'=>'', 'precaucoes'=>'', 'valor'=>'', 'publicado'=>''];

    public function __construct()
    {
    }

    /**
     * @return array
     */


    public function getProductById($id): Produto{
        $firebase = $this->fireBaseConnected();

        $reference = $firebase->getDatabase()->getReference('/produtos')->getChild($id)->getValue();

        $produto  = new Produto();

        foreach ($reference as $key => $value){
            $produto->$key = $value;
        }
        return $produto;
    }

    public function getAllProduct(){
        $firebase = $this->fireBaseConnected();

        $reference = $firebase->getDatabase()->getReference('/produtos')->getValue();

        $i = 0;
        $produtos = new Collection();


        if($reference != null) {
            foreach ($reference as $pro) {
                $produto = new Produto();

                foreach ($pro as $key => $value) {
                    $produto->$key = $value;
                }
                $produtos->put($i++, $produto);
            }
        }
        return $produtos;
    }

    public function addProdutc($array){

        $firebase = $this->fireBaseConnected();
        $firebase->getDatabase()->getReference('/produtos/'.$array['codbarra'])->set($array);

    }

    public function updateProductById($array, $id){
        $firebase = $this->fireBaseConnected();
        $produto = new Produto();
        foreach ($array as $key => $value)
            $produto[$key] = $value;

        $newPostKey = $firebase->getDatabase()->getReference('/produtos')->getChild($id)->getKey();

        $update = [
            'produtos/'.$newPostKey=>$produto
        ];

        $firebase->getDatabase()->getReference()->update($update);
    }



    public function removeProductById($id){
        $firebase = $this->fireBaseConnected();
        $firebase->getDatabase()->getReference('/produtos')->getChild($id)->remove();

    }

    public function removeAllProdutc(){
        $firebase = $this->fireBaseConnected();
        $firebase->getDatabase()->getReference('/produtos')->remove();

    }

    public function fireBaseConnected(){
        $json = JsonKilaxJapan::getDirJson();
        $serviceAccount = ServiceAccount::fromJsonFile($json);
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        return $firebase;
    }

    /**
     * @return array
     */


}