CREATE TABLE course_tbl(
    id_course VARCHAR(255) NOT NULL PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    course_teacher VARCHAR(255) NOT NULL,
    course_desc TEXT NOT NULL,
    course_member int(11),
    course_date datetime,
    created_at datetime
);