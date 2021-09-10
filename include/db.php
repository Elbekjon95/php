<? function db(){
    return new PDO('mysql:host=localhost; dbname=user_1500', 'root', 'root');
}
function userReg($name, $login, $pass, $photo){
    
 $name  = strip_tags($name) ;
 $login = strip_tags($login);
 $pass  = password_hash($pass, CRYPT_BLOWFISH);
 /*    $photo = $_FILES['photo']; */
 
 $db     = db();
 $query  = "INSERT INTO `users` (`name`, `login`, `password`) VALUES (?,?,?)";
 $create = $db->prepare($query);
 $result = $create->execute([$name, $login, $pass]);
 
 if($result):
    
    $userId = $db->lastInsertId();
    $imgQ = "INSERT INTO images (user_id, img_path, img_select) VALUES (?,?,?)";
    $imgP = $db->prepare($imgQ);
    $imgR = $imgP->execute([$userId, $photo, 1]);
    
 endif;
 
return $result;
}

function userAuth($login, $password){
    $db = db();
    $query = "SELECT * FROM users INNER JOIN images using(user_id) WHERE login=?";
    $select = $db->prepare($query);
    $select->execute([$login]);
    $users = $select->fetch(PDO::FETCH_ASSOC);
    
     if($users):
         session_start();
         $_SESSION['id'] = $users['user_id'];
         return true;
     endif;
}

function userInfo(){
    session_start();
    $db = db();
    $query = "SELECT login, name, img_path FROM users INNER JOIN images using(user_id) WHERE user_id=? and img_select=?";
    $select = $db->prepare($query);
    $select->execute([$_SESSION['id'], 1]);
    $result = $select->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

function editName($name){
    session_start();
    $db = db();
    $query = "UPDATE users SET name=?  WHERE user_id=?";
    $update = $db->prepare($query);
    $result = $update->execute([$name, $_SESSION['id']]);
    return $result;
}

?>