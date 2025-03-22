<?php include('key.php'); // include api key ?>

<div>
	<?php
	$keywords = '';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') :
        if (!empty($_POST['keywords'])) {
			$keywords = $_POST['keywords'];
			
			$ch = curl_init('https://api.openai.com/v1/chat/completions');
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=UTF-8', 'Authorization: Bearer '.$api_key));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			
			$data['model'] = 'gpt-4o';
			$data['messages'] = array(array('role' => 'user', 'content' => "Please correct grammar, but don't omit or rewrite anything: ".$keywords));
			$data = json_encode($data);
			//print_r($messages);exit;
					
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			
			$result = curl_exec($ch);
			$resultArr = json_decode($result, true);
			
			if (isset($resultArr['error']['message'])) {
				echo '<p>Error due to too much traffic. Please try again.</p>';
			}
			else {
				$response = $resultArr['choices'][0]['message']['content'];
				if ($response) {
					echo '<p><strong>Corrected Grammar:</strong></p>'.nl2br($response);
				}
				else {
					echo '<p>Error. Please try again later.</p>';
				}
			}					
		}
    endif;
	?>
	<h1>Grammar Checker Tool</h1>
    <form action="" method="POST">
   	<textarea name="keywords" style="width:100%;height:250px;" placeholder="Enter your text for grammar correction."><?php echo $keywords; ?></textarea>
    <input type="submit" name="submit" value="Submit" /><br/><span style="font-size:14px;font-style:italic;">The generated response will show at the top.</span>
    </form>
</div>