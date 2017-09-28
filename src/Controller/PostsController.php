<?php

namespace App\Controller;
use App\Controller\AppController;


/**
* 
*/
class PostsController extends AppController
{
	
	public function index(){

		$this->set('posts',$this->Posts->find('all'));
	}
	
	public function add(){

		$post = $this->Posts->newEntity();

		if($this->request->is('post')){

			$post = $this->request->getData();

			$savePost = $this->loadModel("Posts")->test();

			var_dump($savePost);die;
			$savePost->title = $post['title'];
			$savePost->description = $post['description'];

			if($savePost->save()){

			}

		}
	}
}