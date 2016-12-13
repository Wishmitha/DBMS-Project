=========
students
=========

INSERT INTO `test`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`) VALUES (140253,'Adeesha','Jaysooriya',14,'2016/11/30','2016/11/30');

INSERT INTO `test`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`) VALUES (140392,'Wishmitha','Mendis',14,'2016/11/30','2016/11/30');

INSERT INTO `test`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`) VALUES (140331,'Kusal','Hettiarachchi',14,'2016/12/01','2016/12/01');

======
clubs
======

INSERT INTO `test`.`clubs`(`club_name`,`logo`,`division`,`description`,`created_at`,`updated_at`) VALUES('Rotaract','https://www.seeklogo.net/wp-content/uploads/2013/05/rotaract-club-eps-vector-logo.png','University of Moratuwa','It is a service, leadership, professional and community service organization (often miscommunicated as a Social Service Club) for young men and women between the ages 18–30. Rotaract focuses on the development of young adults as leaders in their communities and workplaces.','2016/11/30','2016/11/30');

INSERT INTO `test`.`clubs`(`club_name`,`logo`,`division`,`description`,`created_at`,`updated_at`) VALUES('AISEC','http://aiesec.gr/wp-content/uploads/2015/08/AIESEC-Logo-Square_A-White-on-Blue.png','Colombo South','AIESEC is an international non-governmental not-for-profit organization that provides young people with leadership development and cross-cultural global internship and volunteer exchange experiences across the globe, with a focus to empower young people so they can make a positive impact on society.','2016/12/01','2016/12/01');

=======
sports
=======

INSERT INTO `test`.`sports`(`sport_name`,`logo`,`team`,`description`,`created_at`,`updated_at`)VALUES('Cricket','https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/16807_10154809697690005_2893730701933941583_n.jpg?oh=ee8549938d3c72423dd1680ce029a207&oe=58F9A942','University of Moratuwa','Official cricket team of University of Moratuwa','2016/12/13','2016/12/13');

=============
competitions
=============

INSERT INTO `test`.`competitions`(`competition_name`,`logo`,`host`,`description`,`created_at`,`updated_at`)VALUES('GSOC','https://developers.google.com/open-source/gsoc/images/gsoc2016-sun-373x373.png','Google','Google Summer of Code is a global program focused on bringing more student developers into open source software development.','2016/12/13','2016/12/13');

============================
extra curricular activities
============================

INSERT INTO `test`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`) VALUES('Club',null,null,1,10,'2016/11/30','2016/11/30');

INSERT INTO `test`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`) VALUES('Club',null,null,2,10,'2016/12/01','2016/12/01');

INSERT INTO `test`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`) VALUES('Sport',1,null,null,20,'2016/12/13','2016/12/13');

INSERT INTO `test`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`,`created_at`,`updated_at`) VALUES('Competition',null,1,null,30,'2016/12/13','2016/12/13');



=================
student_activity
=================

INSERT INTO `test`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`,`created_at`,`updated_at`) VALUES (140253,1,'Web Developer',12,'2015/03/30',0,'Developed "Are you Ready 2016" official website and "Link-Rotaract" promotion page','2016/12/01','2016/12/01');

INSERT INTO `test`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`,`created_at`,`updated_at`) VALUES (140253,4,'Participant',25,'2016/03/25',1,'Completed Project "X-Spectro" of WSO2 successfully','2016/12/13','2016/12/13');

INSERT INTO `test`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`,`created_at`,`updated_at`) VALUES (140392,1,'Member',5,'2016/05/30',0,null,'2016/12/01','2016/12/01');

INSERT INTO `test`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`,`created_at`,`updated_at`) VALUES (140392,2,'Panelist',12,'2015/03/30',0,null,'2016/12/01','2016/12/01');

INSERT INTO `test`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`,`created_at`,`updated_at`) VALUES (140331,2,'Member',7,'2015/10/30',1,null,'2016/12/01','2016/12/01');

INSERT INTO `test`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`,`created_at`,`updated_at`) VALUES (140331,3,'Member',15,'2014/12/22',0,null,'2016/12/13','2016/12/13');



=============
achievements 
=============

INSERT INTO `test`.`achievements`(`act_id`,`stu_id`,`date`,`position`,`description`,`created_at`,`updated_at`) VALUES (1,140392,'2016/10/25','Winner','Best Rotoracter of the Year','2016/12/01','2016/12/01');

INSERT INTO `test`.`achievements`(`act_id`,`stu_id`,`date`,`position`,`description`,`created_at`,`updated_at`) VALUES (2,140392,'2016/06/30','Runners Up','Most outstanding panelist','2016/12/01','2016/12/01');

INSERT INTO `test`.`achievements`(`act_id`,`stu_id`,`date`,`position`,`description`,`created_at`,`updated_at`) VALUES (2,140392,'2015/12/20','Second Runners Up','Most outstanding project','2016/12/01','2016/12/01');


==============
student_login
==============

INSERT INTO `test`.`student_login`(`stu_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (140392,'140392','wolfpack123','2016/12/07','2016/12/07');

INSERT INTO `test`.`student_login`(`stu_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (140253,'140253','wolfpack123','2016/12/09','2016/12/09');

INSERT INTO `test`.`student_login`(`stu_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (140331,'140331','wolfpack123','2016/12/09','2016/12/09');

============
supervisors
============

INSERT INTO `test`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('Michael','Keaton','Club','2016/12/09','2016/12/09');

INSERT INTO `test`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('David','Owen','Club','2016/12/09','2016/12/09');

INSERT INTO `test`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('Tom','Holland','Club','2016/12/11','2016/12/11');

====================
supervisor_activity
====================

INSERT INTO `test`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(1,1,'2016/12/09','2016/12/09');

INSERT INTO `test`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(2,2,'2016/12/09','2016/12/09');

INSERT INTO `test`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(3,1,'2016/12/11','2016/12/11');

INSERT INTO `test`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(3,2,'2016/12/11','2016/12/11');

====================
supervisor_activity
====================

INSERT INTO `test`.`supervisor_login`(`sup_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (1,'Keaton','wolfpack123','2016/12/11','2016/12/11');

INSERT INTO `test`.`supervisor_login`(`sup_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (2,'Owen','wolfpack123','2016/12/11','2016/12/11');

INSERT INTO `test`.`supervisor_login`(`sup_id`,`username`,`password`,`created_at`,`updated_at`) VALUES (3,'Holland','wolfpack123','2016/12/11','2016/12/11');

======
admins
======

INSERT INTO `test`.`admins`(`first_name`,`last_name`,`created_at`,`updated_at`)VALUES('David','Villa','2016/12/13','2016/12/11');



