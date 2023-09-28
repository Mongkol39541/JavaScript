
INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`) VALUES
('BIO-101', 'Intro. to Biology', 'Biology', 4),
('BIO-301', 'Genetics', 'Biology', 4),
('BIO-399', 'Computational Biology', 'Biology', 3),
('CS-101', 'Intro. to Computer Science', 'Comp. Sci.', 4),
('CS-190', 'Game Design', 'Comp. Sci.', 4),
('MU-199', 'Music Video Production', 'Music', 3),
('PHY-101', 'Physical Principles', 'Physics', 4);

INSERT INTO `section` (`course_id`, `sec_id`, `semester`, `year`, `building`, `room_number`, `time_slot_id`) VALUES
('BIO-101', '1', 'Summer', 2017, 'Painter', '514', 'B'),
('BIO-301', '1', 'Summer', 2018, 'Painter', '514', 'A'),
('CS-101', '1', 'Fall', 2017, 'Packard', '101', 'H'),
('CS-190', '1', 'Spring', 2017, 'Taylor', '3128', 'E'),
('MU-199', '1', 'Spring', 2018, 'Packard', '101', 'D'),
('PHY-101', '1', 'Fall', 2017, 'Watson', '100', 'A');

