=========
students
=========

INSERT INTO `exacutor`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`,`deleted_at`) VALUES ('140253','Adeesha','Jaysooriya',14,'2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`,`deleted_at`) VALUES (140392,'Wishmitha','Mendis',14,'2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`,`deleted_at`) VALUES (140331,'Kusal','Hettiarachchi',14,'2016/12/01','2016/12/01',null);

======
clubs
======

INSERT INTO `exacutor`.`clubs`(`club_id`,`club_name`,`logo`,`division`,`created_at`,`updated_at`,`deleted_at`) VALUES(1,'Rotaract',null,'University of Moratuwa','2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`clubs`(`club_id`,`club_name`,`logo`,`division`,`created_at`,`updated_at`,`deleted_at`) VALUES(2,'AISEC',null,'Colombo South','2016/12/01','2016/12/01',null);


============================
extra curricular activities
============================

INSERT INTO `exacutor`.`extra_curricular_activities`(`activity_id`,`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`,`deleted_at`) VALUES(1,'Club',null,null,1,10,'2016/11/30','2016/11/30',null);

INSERT INTO `exacutor`.`extra_curricular_activities`(`activity_id`,`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`,`deleted_at`) VALUES(2,'Club',null,null,2,10,'2016/12/01','2016/12/01',null);

=================
student_activity
=================

INSERT INTO `exacutor`.`student_activity`(`stu_act_id`,`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (1,140253,1,'Web Developer',12,'2015/03/30',0,'2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`student_activity`(`stu_act_id`,`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (2,140392,1,'Member',5,'2016/05/30',0,'2016/12/01','2016/12/01',null);

INSERT INTO `exacutor`.`student_activity`(`stu_act_id`,`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`created_at`,`updated_at`,`deleted_at`) VALUES (3,140331,2,'Member',7,'2015/10/30',1,'2016/12/01','2016/12/01',null);
