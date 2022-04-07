CREATE TABLE teacher_tbl(
    id_teacher VARCHAR(255) NOT NULL PRIMARY KEY,
    teach_name VARCHAR(255) NOT NULL,
    teach_email VARCHAR(255) NOT NULL,
    teach_password VARCHAR(255) NOT NULL,
    teach_status VARCHAR(255) NOT NULL,
    created_at datetime,
    updated_at datetime
);