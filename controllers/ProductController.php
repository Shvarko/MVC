<?php
include_once ROOT. '/models/Product.php';
class ProductController
{


		public function actionList()
		{
			echo 'ты попал в продукты';
			return true;
		}


}