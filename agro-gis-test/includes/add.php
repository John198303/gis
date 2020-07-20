<?php
					
					require "../includes/db.php";
					
					$data = $_POST;
					if( isset($data['add']) )
					{
						$errors = array();
						if( trim($data['name']) == '')
						{
							$errors[] = 'Введите имя';
						}
						if( trim($data['second_name']) == '')
						{
							$errors[] = 'Введите имя';
						}
						if( trim($data['nome']) == '')
						{
							$errors[] = 'Введите фамилию';
						}
						if( trim($data['staff']) == '')
						{
							$errors[] = 'Введите должность';
						}
						if( empty($errors))
						{
							
						}
						else
						{
							echo '<div style="color: red;">.array_shift($errors).</div>';
						}
					}
					

?>




