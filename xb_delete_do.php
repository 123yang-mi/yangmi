<?php
$code = $_GET["code"];

//������
$conn = @mysql_connect("localhost","root","123456");  //localhostΪ������������ַ��rootΪ�û�����123Ϊ���ݿ�����
//ѡ����������ݿ�
mysql_select_db("stusys",$conn);
//дSQL���
$sql = "delete from xbxxb  where Code = '$code'";

//ִ��
$result = mysql_query($sql);

if($result)
{
    //��תҳ��
    header("location:xb_delete.php");  //ɾ���ɹ�������ת����ʾҳ��
}
else
{
    echo "ɾ��ʧ�ܣ�";
}
?>