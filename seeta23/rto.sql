create table admin(
	admin_id	text primary key,
	admin_pwd	text not null,
	admin_name	text not null
);

create table learner_user(
	user_id		text primary key,
	user_pwd	text not null,
	full_name	text not null,
	birth_date	date,
	address		text,
	phone		text,
	email		text,
	status		text,
	issued		text,
	issue_date	text,
	expr_date	text,
	id_proof	text,
	photo_proof	text,
	vehicle_type	text
);	

create table questions(
	qid		serial primary key,
	question	text,
	option1		text,
	option2		text,
	option3		text,
	img		text,
	answer		int
);

create table test(
	test_id		serial primary key,
	test_date	date,
	user_id		text references learner_user(user_id),
	marks		int,
	remarks 	text
);

create table test_details(
	qid		int references questions(qid),
	test_id		int references test(test_id),
	ans		int
);

insert into questions(question,option1,option2,option3,answer) values
('Near a pedestrian crossing when the pedestrians are waiting to cross the road you should,','Sound horn and proceed','Slow down, sound horn and pass','Stop the vehicle and wait till the pedestrians cross the road and then proceed','',3),
('The following sign represents','Stop','No Parking','Hospital ahead','stop.jpg',1),
('You are approaching a narrow bridge, another vehicle is about to enter the bridge from opposite you should','Increase the speed and try to cross the bridge as fast as possible','Put on the head light and pass the bridge','Wait till the other vehicle crosses the bridge and then proceed','',3),
('The following sign represents','Keep left','There is no road to the left','Compulsory turn left','turn_left.jpg',3),
('When a vehicle is involved in an accident causing injury to any person','Take the vehicle to the nearest police station and report the accident', 'Stop the vehicle and report to the police station','Take all reasonable steps to secure medical attention to the injured and report to the nearest police station within 24 hours','',3),
('The following sign represents','Give way','Hospital ahead','Traffic island ahead','give_way.jpg',1),
('On a road designated as one way','Parking is prohibited','Overtaking is prohibited','Should not drive in reverse gear','',3),
('The following sign represents','No entry','One way','Speed limit ends','one_way.jpg',2),
('You can overtake a vehicle in front','Through the right side of that vehicle','Through the left side','If the road is wide10','',1),
('The following sign represents','Right turn prohibited','Sharp curve to the right','U - turn prohibited','u_turn_prohibited.jpg',3),
('When a vehicle appoaches an unguarded railway level crossing before crossing it the driver shall','Stop the vehicle on the left side of the road get down from the vehicle, go to the railway track and ensure that no train or trolley is coming from either side','Sound horn and cross the track as fast as possible','Wait till the train passes','',1),
('The following sign represents','Pedestrian crossing','Pedestrian may enter','Pedestrian prohibited','pedestrian_crossing.png',1),
('How can you distinguish a transport vehicle','By looking at the tyre size','By colour of the vehicle','By looking at the number plate of the vehicle','',3),
('The following sign represents','Keep right side','Parking on the right allowed','Compulsory turn to right','parking_right_allowed.jpg',2),
('Validity of learners licence','Till the driving licence is obtained','6 months','30 days','',2),
('The following sign represents','U - Turn prohibited','Right turn prohibited','Over through left prohibited','right_turn_prohibited.png',2),
('In a road without footpath the pedestrains','Should walk on the left side of the road','Should walk on the right side of the road','May walk on either side of the road','',2),
('The following sign represents','Horn prohibited','Compulsory sound horn','May sound horn','horn_prohibited.gif',1),
('Free passage should be given to the following types of vehicles','Police vehicles','Ambulance and fire service vehicles','Express and Super Express buses','',2),
('The following sign represents','Roads on both sides in front','Narrow bridge ahead','Narrow road ahead','narrow_bridge.png',2),
('Vehicles proceeding from opposite direction should be allowed to pass through','Your right side','Your left side','The convenient side','',1),
('The following sign represents','First aid post','Resting place','Hospital','hospital.jpg',3),
('Driver of a vehicle may overtake','While driving down hill','If the road is sufficiently wide','When the driver of the vehicle in front shows the signal to overtake','',3),
('The following sign represents','First aid post','Resting place','Hospital','first_aid_post.jpg',1),
('Driver of a motor vehicle shall drive through','The right side of the road','The left side of the road','The Center of the road','',2),
('The following sign represents','Hospital','Resting place','First aid post','resting_place.jpg',2),
('When a Vehicle is parked on the road side during night','The vehicle should be locked','The person having licence to drive such a vehicle should be in the drivers seat','The park light shall remain lit',3),
('The following sign represents','Road closed','No parking','End of speed restriction','end_of_speed.png',3),
('Fog lamps are used','During night','When there is mist','When the opposite vehicle is not using dim light','',2),
('The following sign represents','Narrow road ahead','Narrow bridge ahead','Roads on both sides ahead','narrow_road.jpg',1),
('Zebra lines are meant for','Stopping vehicle','Pedestrians crossing','For giving pereference to vehicle','',2),
('The following sign represents','Railway staion near','Level crossing unguareded','Level crossing Guarded','level_crossing.png',2),
('When an ambulance is approaching','Allow passage if there is no vehicles from front side','No preference need be given','The driver shall allow free passage by drawing to the side of the road','',3),
('The following sign represents','Entry through right side prohibited','Entry through left prohibited','Overtaking prohibited','overtaking.jpg',3),
('Red traffic light indicates','Vehicle can proceed with caution','Stop the vehicle','Slow down','',2),
('The following sign represents','Cross Road','No entry','Hospital','cross_road.jpg',1),
('Parking a vehicle in front of entrance to hospital','Proper','Improper','Proper if no parking','',2),
('The following sign represents','Restriction ends','No entry','No overtaking','no_entry.png',2),
('When the slippery road sign is seen on the road','The driver Shall','Reduce the speed by changing the gear','Apply brake proceed in the same speed','',2),
('The following sign represents','May turn to left','Compulsory go ahead or turn left','Side road left','side_road_left.png',3),
('Overtaking is prohibited in following circumstances','When it is likely to cause','Inconvenience or danger to other traffic','When the vehicle in front is reducing speed during night','',2),
('The following sign represents','Sound horn compulsory','Sound horn continuously','Horn prohibited','COMPULSORY_SOUND_HORN.png',1),
('Overtaking when approaching a bend','Is permissible','Not permissible','Is permissible with care','',2),
('The following sign represents','Road to the right in front','Compulsory turn right','Turn to right prohibited','compulsory_turn_right_ahead.jpg',2),
('Drunken driving','Allowed in private vehicles','Allowed during night time','Prohibited in all vehicles','',3),
('The following sign represents','End of restriction','Do not stop','No parking','no_parking.jpg',3)
('Use of horn prohibited','Mosque church and Temple','Near Hospital, Courts of Law','Near Police Station','',2),
('The Sign represents','Go straight','One - way','Prohibited in both direction','one_way1.jp',2),
('Rear vew mirror is used','For seeing face','For watching the traffic approaching from behind','For seeing the back seat passenger','',2),
('The Sign represents','No entry for motor vehicles','No entry for cars and motor cycles','Entry allowed for cars and motor vehicles','no_entry_for_motor_vehicles.jpg',1);






