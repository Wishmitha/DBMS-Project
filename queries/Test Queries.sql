=========
students
=========

INSERT INTO `exacutor_schema`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`) VALUES (140253,'Adeesha','Jaysooriya',14,'2016/11/30','2016/11/30');

INSERT INTO `exacutor_schema`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`) VALUES (140392,'Wishmitha','Mendis',14,'2016/11/30','2016/11/30');

INSERT INTO `exacutor_schema`.`students`(`student_id`,`first_name`,`last_name`,`batch_id`,`created_at`,`updated_at`) VALUES (140331,'Kusal','Hettiarachchi',14,'2016/12/01','2016/12/01');

======
clubs
======

INSERT INTO `exacutor_schema`.`clubs`(`club_name`,`logo`,`division`,`description`) VALUES('Rotaract','https://www.seeklogo.net/wp-content/uploads/2013/05/rotaract-club-eps-vector-logo.png','University of Moratuwa','It is a service, leadership, professional and community service organization (often miscommunicated as a Social Service Club) for young men and women between the ages 18–30. Rotaract focuses on the development of young adults as leaders in their communities and workplaces.');

INSERT INTO `exacutor_schema`.`clubs`(`club_name`,`logo`,`division`,`description`) VALUES('AIESEC','http://aiesec.gr/wp-content/uploads/2015/08/AIESEC-Logo-Square_A-White-on-Blue.png','Colombo South','AIESEC is an international non-governmental not-for-profit organization that provides young people with leadership development and cross-cultural global internship and volunteer exchange experiences across the globe, with a focus to empower young people so they can make a positive impact on society.');

=======
sports
=======

INSERT INTO `exacutor_schema`.`sports`(`sport_name`,`logo`,`team`,`description`)VALUES('Cricket','http://pics.crickstore.com/media/catalog/product/cache/1/small_image/295x295/9df78eab33525d08d6e5fb8d27136e95/g/r/gray-nicolls-warrioir-cricket-ball.png','University of Moratuwa','Official cricket team of University of Moratuwa');

=============
competitions
=============

INSERT INTO `exacutor_schema`.`competitions`(`competition_name`,`logo`,`host`,`description`)VALUES('GSOC','https://developers.google.com/open-source/gsoc/images/gsoc2016-sun-373x373.png','Google','Google Summer of Code is a global program focused on bringing more student developers into open source software development.');

============================
extra curricular activities
============================

INSERT INTO `exacutor_schema`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`) VALUES('Club',null,null,5,10);

INSERT INTO `exacutor_schema`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`) VALUES('Club',null,null,6,10);

INSERT INTO `exacutor_schema`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`) VALUES('Sport',3,null,null,20);

INSERT INTO `exacutor_schema`.`extra_curricular_activities`(`type`,`sp_id`,`comp_id`,`clb_id`,`defined_effort`) VALUES('Competition',null,3,null,30);



=================
student_activity
=================

INSERT INTO `exacutor_schema`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`) VALUES (140253,9,'Web Developer',12,'2015/03/30',0,'Developed "Are you Ready 2016" official website and "Link-Rotaract" promotion page');

INSERT INTO `exacutor_schema`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`) VALUES (140253,12,'Participant',25,'2016/03/25',1,'Completed Project "X-Spectro" of WSO2 successfully');

INSERT INTO `exacutor_schema`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`) VALUES (140392,1,'Member',5,'2016/05/30',0,null);

INSERT INTO `exacutor_schema`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`) VALUES (140392,2,'Panelist',12,'2015/03/30',0,null);

INSERT INTO `exacutor_schema`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`) VALUES (140331,2,'Member',7,'2015/10/30',1,null);

INSERT INTO `exacutor_schema`.`student_activity`(`stu_id`,`act_id`,`role`,`effort`,`joined`,`is_validated`,`description`) VALUES (140331,3,'Member',15,'2014/12/22',0,null);



=============
achievements 
=============

INSERT INTO `exacutor_schema`.`achievements`(`act_id`,`stu_id`,`date`,`position`,`description`) VALUES (1,140392,'2016/10/25','Winner','Best Rotoracter of the Year');

INSERT INTO `exacutor_schema`.`achievements`(`act_id`,`stu_id`,`date`,`position`,`description`) VALUES (2,140392,'2016/06/30','Runners Up','Most outstanding panelist');

INSERT INTO `exacutor_schema`.`achievements`(`act_id`,`stu_id`,`date`,`position`,`description`) VALUES (2,140392,'2015/12/20','Second Runners Up','Most outstanding project');



============
supervisors
============

INSERT INTO `exacutor_schema`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('Michael','Keaton','Club','2016/12/09','2016/12/09');

INSERT INTO `exacutor_schema`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('David','Owen','Club','2016/12/09','2016/12/09');

INSERT INTO `exacutor_schema`.`supervisors`(`first_name`,`last_name`,`field`,`created_at`,`updated_at`)VALUES('Tom','Holland','Club','2016/12/11','2016/12/11');

====================
supervisor_activity
====================

INSERT INTO `exacutor_schema`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(1,1,'2016/12/09','2016/12/09');

INSERT INTO `exacutor_schema`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(2,2,'2016/12/09','2016/12/09');

INSERT INTO `exacutor_schema`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(3,1,'2016/12/11','2016/12/11');

INSERT INTO `exacutor_schema`.`supervisor_activity`(`sup_id`,`act_id`,`created_at`,`updated_at`)VALUES(3,2,'2016/12/11','2016/12/11');


======
admins
======

INSERT INTO `exacutor_schema`.`admins`(`first_name`,`last_name`,`created_at`,`updated_at`)VALUES('David','Villa','2016/12/13','2016/12/11');



