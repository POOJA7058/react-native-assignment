,confo_psw,frist_name,last_name,gender,birthday,country,address,phone_number,word,hobbies,skills,think,






,'$confo_psw','$frist_name','$last_name','$gender','$birthday','$country','$address','$phone_number','$word','$hobbies','$skills','$think'




if ($db->query($query) === TRUE) {
   echo "New record created successfully";
} else {
   echo "Error: " . $query . "<br>" . $db->error;
}