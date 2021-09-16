<?php


class ProductsModel {
	private $db = null;
	public function __construct(DBController $db) {
		$this->db=$db;
	}

	public function GetAllProducts(){
		$query="SELECT * FROM product";

		$stmnt=$this->db->conn->prepare($query);
		$stmnt->execute();
		$stmnt->setFetchMode(PDO::FETCH_ASSOC);

		if ($stmnt->rowCount()===0){
			echo 'No ProductsModel Available';
		}

		else{
			$Products=$stmnt->fetchAll();
			return $Products;
		}

	}

	public function InsertProduct($ProdDetails){
		$stmnt=$this->db->conn->prepare('INSERT INTO product (ProdName,ProdDesc,ProdImg,Price,Specs)
    							VALUES(:prodname,:proddesc,:prodimg,:price,:specs)');

		$params=[
			':prodname'=>$ProdDetails['title'],
			':proddesc'=>$ProdDetails['desc'],
			':prodimg'=>$ProdDetails['imagePath'],
			':price'=>$ProdDetails['price'],
			':specs'=>$ProdDetails['specs'],
		];

		$stmnt->execute($params);


	}

	public function  GetProduct(int $id){
		$stmnt=$this->db->conn->prepare('SELECT * FROM product WHERE id=:id');
		$params=[
			':id'=>$id,
		];

		$stmnt->execute($params);

		if ($stmnt->rowCount()===0){
		}
		else{
			$row = $stmnt->fetch();
			return $row;
		}


	}
}