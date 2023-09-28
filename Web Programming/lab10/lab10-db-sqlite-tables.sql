
CREATE TABLE `course` (
  `course_id` varchar(7) PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `credits` int(3) DEFAULT NULL
);

CREATE TABLE `section` (
  `course_id` varchar(8)  PRIMARY KEY,
  `sec_id` varchar(8) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `year` int(4) NOT NULL,
  `building` varchar(15) NOT NULL,
  `room_number` varchar(7) NOT NULL,
  `time_slot_id` varchar(5) NOT NULL
) ;

