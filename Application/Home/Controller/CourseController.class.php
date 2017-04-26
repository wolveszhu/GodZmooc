<?php
	namespace Home\Controller;
	use Think\Controller;
	class CourseController extends Controller{
		public function index(){
			
			//查找视频 ，讲师 ，
			
			$vid = $_GET['id'];
			$teacher = M('teacher');
			$course = M('course');
			$video = M('video');
			
			//网站配置
			$config = M("config");
			$configs = $config -> find();
			
			$videos = $video -> find($vid);
			// dump($videos);
			$teachers = $teacher -> find($videos['nid']);
			//dump($teachers);
			
			//目录详情
			$courses = $course -> where("vid = {$vid}") -> select();
			foreach($courses as &$c){
				$c['time'] = date("H:s",$c['time']);
			}
			
			
			
			
			//dump($courses);
		 // dump($courses);
			$this -> assign("configs",$configs);
			$this -> assign('video',$videos);
			//$this -> assign('time',$times);
			$this -> assign('courses',$courses);
			
			$this -> assign('teacher',$teachers);
			$this -> display();
			
			
		}
		
		public function num(){
		    	if(!$_SESSION['id']){
					$this -> redirect('Login/index');
				}
				$video = M('video');
				if($video -> create()){
					 if($video -> save()){
					    
					 }else{
						$this -> error("修改失败");
					 }  
				}	
		}
		
		//网站配置
		public function course_note(){
			$config = M("config");
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this -> display();
		}
		public function course_replay(){
			$config = M("config");
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this -> display();
		}
		public function course_talk(){
			$config = M("config");
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this -> display();
		}
		
	}
?>