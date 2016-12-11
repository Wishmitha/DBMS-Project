=========
students
=========

INSERT INTO `exacutor`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`,`deleted_at`) VALUES ('140253','Adeesha','Jaysooriya',14,'2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`,`deleted_at`) VALUES (140392,'Wishmitha','Mendis',14,'2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`,`deleted_at`) VALUES (140331,'Kusal','Hettiarachchi',14,'2016/12/01','2016/12/01',null);

======
clubs
======

INSERT INTO `exacutor`.`clubs`(`club_name`,`logo`,`division`,`created_at`,`updated_at`,`deleted_at`) VALUES('Rotaract',null,'University of Moratuwa','2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`clubs`(`club_name`,`logo`,`division`,`created_at`,`updated_at`,`deleted_at`) VALUES('AISEC',null,'Colombo South','2016/12/01','2016/12/01',null);


============================
extra curricular activities
============================

INSERT INTO `exacutor`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`,`deleted_at`) VALUES('Club',null,null,1,10,'2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`,`deleted_at`) VALUES('Club',null,null,2,10,'2016/12/01','2016/12/01',null);

=================
student_activity
=================

INSERT INTO `exacutor`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (140253,1,'Web Developer',12,'2015/03/30',0,'2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (140392,1,'Member',5,'2016/05/30',0,'2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (140392,2,'Panelist',12,'2015/03/30',0,'2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (140331,2,'Member',7,'2015/10/30',1,'2016/12/01','2016/12/01',null);d

=============
achievements 
=============

INSERT INTO `exacutor`.`achievements`(`act_id`,`stu_id`,`position`,`description`,`created_at`,`updated_at`,`deleted_at`) VALUES (1,140392,'Winner','Best Rotoracter of the Year','2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`achievements`(`act_id`,`stu_id`,`position`,`description`,`created_at`,`updated_at`,`deleted_at`) VALUES (2,140392,'Runners_Up','Most outstanding panelist','2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`achievements`(`act_id`,`stu_id`,`position`,`description`,`created_at`,`updated_at`,`deleted_at`) VALUES (2,140392,'third_place','Most outstanding project','2016/12/01','2016/12/01',null);

==============
student_login
==============

INSERT INTO `exacutor`.`student_login`(`stu_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (140392,'140392','wolfpack123','2016/12/07','2016/12/07');

INSERT INTO `exacutor`.`student_login`(`stu_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (140253,'140253','wolfpack123','2016/12/09','2016/12/09');

INSERT INTO `exacutor`.`student_login`(`stu_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (140331,'140331','wolfpack123','2016/12/09','2016/12/09');

============
supervisors
============

INSERT INTO `exacutor`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('Michael','Keaton','Club','2016/12/09','2016/12/09');

INSERT INTO `exacutor`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('David','Owen','Club','2016/12/09','2016/12/09');

INSERT INTO `exacutor`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('Tom','Holland','Club','2016/12/11','2016/12/11');

====================
supervisor_activity
====================

INSERT INTO `exacutor`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(1,1,'2016/12/09','2016/12/09');

INSERT INTO `exacutor`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(2,2,'2016/12/09','2016/12/09');

INSERT INTO `exacutor`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(3,1,'2016/12/11','2016/12/11');

INSERT INTO `exacutor`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(3,2,'2016/12/11','2016/12/11');

====================
supervisor_activity
====================

INSERT INTO `exacutor`.`supervisor_login`(`sup_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (1,'Keaton','wolfpack123','2016/12/11','2016/12/11');

INSERT INTO `exacutor`.`supervisor_login`(`sup_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (2,'Owen','wolfpack123','2016/12/11','2016/12/11');

INSERT INTO `exacutor`.`supervisor_login`(`sup_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (3,'Holland','wolfpack123','2016/12/11','2016/12/11');



