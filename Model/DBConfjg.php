'
<?php
		class Database{
			private $hostname ='localhost';
			private $username = 'root';
			private $pass = '';
			private $dbname = 'doraemonshop';

			private $conn = NULL;
			private $result = NULL;

			public function connect(){
				$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
				if(!$this->conn)
				{
					echo "Kết nối thất bại!";
					exit();
				}
				else{
					mysqli_set_charset($this->conn, 'utf8');
				}
				return $this->conn;
			}
		//Câu lệnh truy vấn;
			public function execute($sql){
				$this->connect();
				$this->result = $this->conn->query($sql);
				return $this->result;
			}
		//Phương thức lấy dữ liệu;
			public function getData(){
				if($this->result){
					$data = mysqli_fetch_array($this->result);
				}
				else{
					$data = 0;
				}
				return $data;
			}
		//Phương thức lấy toàn bộ dữ  liệu;
			public function getAllData($table){
				$sql = "SELECT * FROM $table LIMIT 6";
				$this -> execute($sql);
				if(mysqli_num_rows($this->result)==0){
					$data = 0;
				}
				else{
					while($datas = $this->getData()){
						$data[] = $datas;
					}
				}
				return $data;
			}
			public function getAllDataa($table){
				$sql = "SELECT * FROM $table ";
				$this -> execute($sql);
				if(mysqli_num_rows($this->result)==0){
					$data = 0;
				}
				else{
					while($datas = $this->getData()){
						$data[] = $datas;
					}
				}
				return $data;
			}
			public function getAllDataLimit($table,$l,$id){
				$sql = "SELECT * FROM $table where id!=$id  LIMIT $l ";
				$this -> execute($sql);
				if(mysqli_num_rows($this->result)==0){
					$data = 0;
				}
				else{
					while($datas = $this->getData()){
						$data[] = $datas;
					}
				}
				return $data;
			}

			public function getDataByID($table,$id){
				$sql = "SELECT * FROM $table WHERE id = $id";
				return mysqli_fetch_array($this -> execute($sql));
			}

			public function getAllDataByID($table, $id){

				$sql = "SELECT * FROM $table WHERE id_parent = '$id'";
				$this -> execute($sql);
				if( mysqli_num_rows ($this->result) == 0 ){
					$data = 0;
				}
				else{
					while($datas = $this->getData()){
						$data[] = $datas;
					}
				}
				return $data;
			}
			public function insert($table,$data)
			{
				
				$field_list = '';
   				 // Lưu trữ danh sách giá trị tương ứng với field
    			$value_list = '';
				
				foreach ($data as $key => $value){
			        $field_list .= ",$key";
			        $value_list .= ",'$value'";
			    }
			 
			    // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
			    $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
			 
			    $this -> execute($sql);
			}
			function update($table, $data, $where)
		    {
		        $sql = '';
		        // Lặp qua data
		        foreach ($data as $key => $value){
		            $sql .= "$key = '$value',";
		        }
		 
		        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
		        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
		 
		        $this -> execute($sql);
		    }
		 
		    // Hàm delete
		    function remove($table, $where){
		        // Kết nối
		        $this->connect();
		         
		        // Delete
		        $sql = "DELETE FROM $table WHERE $where";
		        return $this -> execute($sql);
		    }
 
		}
?>