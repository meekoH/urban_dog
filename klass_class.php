<?php

class klass_class {

    public function getDate() {
        return date("Y-m-d");
    }

    public function getDateTime() {
        return date("Y-m-d H:i:s");
    }

    public function getIP() {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function activity_log_entry($notes) {
        global $klassObj, $conn;
        $sql = "INSERT INTO  activitylog_mst SET z_contactid_fk= " . $_SESSION['contact_id'] . ",
            	z_loginlogid_fk=" . $_SESSION['loginlog_id'] . ",
                activitylog_notes='" . mysqli_real_escape_string($conn, $notes) . "'";
        $z_activitylogid_fk = $klassObj->insert($sql);
        return $z_activitylogid_fk;
    }

    public function login_log_entry($type) {
        global $klassObj, $conn;
        session_start();
        if ($type == 'login') {
            $sql = "INSERT INTO loginlog_mst SET z_contactid_fk= " . $_SESSION['contact_id'] . ",login_from= '" . $_SESSION['from'] . "',
                login_ip='" . $klassObj->getIP() . "'";
            $logid = $klassObj->insert($sql);
            $_SESSION['gsf_loginlog_id'] = $logid;
        } else {
            $klassObj->update("UPDATE loginlog_mst SET logout_datetime=NOW() WHERE z_loginlogid_pk=" . $_SESSION['gsf_loginlog_id'] . "");
        }
    }

    public function send_mail_cc($subject, $from, $recipient, $mess, $isHTML = FALSE, $filearr = Array(), $path = "") {

        //set the message content type
        $content_type = "text/plain";
        if ($isHTML == TRUE) {
            $content_type = "text/html";
        }
        if (is_array($recipient)) {
            $to = $recipient[0];
            $cc = $recipient[1];
            $bcc = $recipient[2];
        }
        else
            $to = $recipient;
        //set the header
        $headers = "From: " . $from . "\r\n";
        $cc != '' ? $headers.="cc: $cc \r\n" : '';
        $bcc != '' ? $headers.="Bcc: $bcc \r\n" : '';
        $headers.="Bounce-to: " . $to . "\r\n";

        if (count($filearr) > 0) {// USE multipart mime message to send mail with attachment
            //unique mime boundry seperater
            $mime_boundary_value = md5(uniqid(time()));

            //set the headers
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$mime_boundary_value\";\r\n";
            $headers .= "If you are reading this, then upgrade your e-mail client to support MIME.\r\n";
            $headers .= "X-Priority: 1 (Highest)\n";
            $headers .= "X-MSMail-Priority: High\n";
            $headers .= "Importance: High\n";

            //set the message
            if ($mess <> "") {
                $mess = "--$mime_boundary_value\n" .
                        "Content-Type: $content_type; charset=\"iso-8859-1\"\n" .
                        "Content-Transfer-Encoding: 7bit\n\n" .
                        $mess . "\n\n";
            }

            for ($i = 0; $i < count($filearr); $i++) {
                // if the upload succeded, the file will exist
                $filepath = $path . "/" . $filearr[$i];
                if (file_exists($filepath)) {
                    $mess .= "--$mime_boundary_value\n";
                    $mess .= "Content-Type: {application/pdf}; name=\"{$filearr[$i]}\"\n";
                    $mess .= "Content-Disposition: attachment; filename=\"{$filearr[$i]}\"\n";
                    $mess .= "Content-Transfer-Encoding: base64\n\n";

                    //read file data
                    $file = fopen($filepath, 'rb');
                    $data = fread($file, filesize($filepath));
                    fclose($file);
                    //encode file data
                    $data = chunk_split(base64_encode($data));
                    $mess .= $data . "\n\n";
                }
            }
            $mess .= "--$mime_boundary_value--\n"; //end message
        } else {
            //set the header
            $headers .="Content-type: $content_type";
        }
        //sending mail
        $response = 0;
        if ($recipient != "")
            $response = mail($to, $subject, $mess, $headers, '-f' . $from); //this function will send mail
        return $response;
    }

    public function select($sql = "") {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        $data = array();
        $results = @mysqli_query($conn, $sql);
        if ((!$results) or ( empty($results))) {
            return false;
        }
        if (mysqli_num_rows($results) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_array($results)) {
                $data[$count] = $row;
                $count++;
            }
        }
        mysqli_free_result($results);
        return $data;
    }

    public function selectArray($sql, $field) {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        $data = array();
        $results = @mysqli_query($conn, $sql);
        if ((!$results) or ( empty($results))) {
            return false;
        }
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                $data[] = $row[$field];
            }
        }
        mysqli_free_result($results);
        return $data;
    }

    public function selectassocArray($sql, $key, $value) {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        $data = array();
        $results = @mysqli_query($conn, $sql);
        if ((!$results) or ( empty($results))) {
            return false;
        }
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                $pid = $row[$key];
                $data[$pid] = $row[$value];
            }
        }
        mysqli_free_result($results);
        return $data;
    }

    public function selectassoc_multiArray($sql, $key, $value) {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        $data = array();
        $results = @mysqli_query($conn, $sql);
        if ((!$results) or ( empty($results))) {
            return false;
        }
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                $pid = $row[$key];
                $uid = $row[$value];
                $data[$pid][] = $uid;
            }
        }
        mysqli_free_result($results);
        return $data;
    }

    public function selectBatch($sql = "", $field = "") {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        $results = @mysqli_query($conn, $sql);
        if ((!$results) or ( empty($results))) {
            return false;
        }
        $formattedArr = array();
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                $keysArr = (array_keys($row));
                if (count($keysArr) > 0) {
                    foreach ($keysArr as $mykey) {
                        $formattedArr[$row[$field]][$mykey] = $row[$mykey];
                    }
                }
            }
        }
        mysqli_free_result($results);
        return $formattedArr;
    }

    public function selectBatcharray($sql = "", $field = "") {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        $results = @mysqli_query($conn, $sql);
        if ((!$results) or ( empty($results))) {
            return false;
        }
        $formattedArr = array();
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                $formattedArr[$row[$field]][] = $row;
            }
        }
        mysqli_free_result($results);
        return $formattedArr;
    }

    public function insert($sql = "") {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        mysqli_query($conn, $sql);
        $id = mysqli_insert_id($conn);
        return $id;
    }

    public function delete($sql = "") {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }

    public function update($sql = "") {
        global $conn;
        if (empty($sql)) {
            return false;
        }
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }

    public function multiexplode($delimiters, $string) {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return $launch;
    }

    public function checksession() {
        global $linked_accounts;
        if ($linked_accounts['fb']['islinked'] == 1 || $linked_accounts['tw']['islinked'] == 1 || $linked_accounts['in']['islinked'] == 1) {
            echo "<script language='javascript' type='text/javascript'>window.location.href='http://www.dmbdemo.com/webapp/gsfapp/link.php'</script>";
        }
    }

    public function restrict_unknown() {
        if (!isset($_SESSION['contact_id'])) {
            ?>
            <script language="javascript">
                window.location.href = "<?=SITE_URL_REMOTE?>admin/login.php";
            </script>
            <?php

        }
    }

    public function get_contact_id() {
        if (isset($_SESSION['contact_id'])) {
            return $_SESSION['contact_id'];
        } else {
            return 0;
        }
    }

    public function find_imagetype($e) {

        if (strtolower($e) == strtolower('.png')) {
            $imagetype = "image/png";
        } else if (strtolower($e) == strtolower('.jpg')) {
            $imagetype = "image/jpg";
        } else if (strtolower($e) == strtolower('.jpeg')) {
            $imagetype = "image/jpeg";
        } else if (strtolower($e) == strtolower('.gif')) {
            $imagetype = "image/gif";
        } else if (strtolower($e) == strtolower('.bmp')) {
            $imagetype = "image/bmp";
        } else if (strtolower($e) == strtolower('.mp3')) {
            $imagetype = "audio";
        } else if (strtolower($e) == strtolower('.mov')) {
            $imagetype = "video";
        } else if (strtolower($e) == strtolower('.mpeg')) {
            $imagetype = "video";
        } else if (strtolower($e) == strtolower('.mpg')) {
            $imagetype = "video";
        } else if (strtolower($e) == strtolower('.avi') || strtolower($e) == strtolower('.avi')) {
            $imagetype = "video";
        } else if (strtolower($e) == strtolower('.wmv')) {
            $imagetype = "video";
        } else if (strtolower($e) == strtolower('.flv')) {
            $imagetype = "video";
        } else if (strtolower($e) == strtolower('.html')) {
            $imagetype = "html";
        } else if (strtolower($e) == strtolower('.htm')) {
            $imagetype = "html";
        }
        /* else if (strtolower($e) == strtolower('.pdf'))
          {
          $imagetype="pdf";
          } */ else if (strtolower($e) == strtolower('.css')) {
            $imagetype = "css";
        } else
            $imagetype = "others";
        return $imagetype;
    }

    public function compress_image($source_url, $destination_url, $quality) {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source_url);
        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source_url);
        imagejpeg($image, $destination_url, $quality);
        return $destination_url;
    }

    public function getResponse($url) {
        $curlopt = curl_init();
        curl_setopt($curlopt, CURLOPT_URL, $url);
//        curl_setopt($curlopt, CURLOPT_HTTPHEADER, array("Authorization: Bearer $access_token"));
        curl_setopt($curlopt, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curlopt, CURLOPT_SSL_VERIFYPEER, FALSE);
        $result_access_t = curl_exec($curlopt);
        curl_close($curlopt);
        return $result_access_t;
    }

}
?>