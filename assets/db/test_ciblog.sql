create table users(
	uID int(11) not null primary key auto_increment,
	fname varchar(20) not null,
	mname varchar(20),
	lname varchar(20) not null,
	username varchar(20) not null,
	password varchar(255) not null,
	reg_at timestamp NOT NULL DEFAULT current_timestamp()
);

create table post(
	pID int(11) not null primary key auto_increment,
	tittle varchar(20) not null,
	description varchar(100) not null,
	cr_by int(11) not null,
	cr_at timestamp NOT NULL DEFAULT current_timestamp()

	constraint post_admin foreign key(cr_by) references users(uID) on delete cascade on update cascade
 );