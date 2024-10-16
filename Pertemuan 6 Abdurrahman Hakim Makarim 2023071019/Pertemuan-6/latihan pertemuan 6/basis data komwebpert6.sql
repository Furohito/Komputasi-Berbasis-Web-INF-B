create database komwebpert6;

use komwebpert6;

CREATE TABLE biodata (
  id smallint(4) NOT NULL,
  namadepan varchar(50) NOT NULL,
  namabelakang varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel Biodata Mahasiswa';

ALTER TABLE biodata
  ADD PRIMARY KEY (`id`);
  
TRUNCATE TABLE biodata;

DELETE FROM biodata;
ALTER TABLE biodata AUTO_INCREMENT = 1;



ALTER TABLE biodata AUTO_INCREMENT = 1;

SET sql_safe_updates = 0;


select * from biodata;

delete from biodata where namadepan = 'Harsono';

DELETE FROM biodata;