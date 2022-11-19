<?php
require './src/User.php';
use PHPUnit\Framework\TestCase;
class UserTest extends  TestCase{
    public function testUser()
    {
        $name='Mohamed Alashmawy';
        $email='mohamedalashmawy@gmail.com';
        $user=new User();
        $user->set_name($name);
        $user->set_email($email);
        $this->assertEquals($name,$user->name());
        $this->assertEquals('Ahmed',$user->name('Ahmed'));
        $this->assertEquals($email,$user->email());
        $this->assertEquals('AhmedMohamed@gmail.com',$user->email('AhmedMohamed@gmail.com'));
    }
}
