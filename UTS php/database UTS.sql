create database portfolio_db;
use portfolio_db;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE homepage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT
);


CREATE TABLE about (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL
);

CREATE TABLE experiences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    link VARCHAR(255),
    image VARCHAR(255)
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

INSERT INTO homepage (content) 
VALUES 
('Halo, Saya Abdurrahman Hakim. Ini merupakan website portofolio Abdurrahman Hakim. Website ini adalah tempat saya berbagi tentang pengenalan diri, keahlian, dan pengalaman yang telah saya kerjakan. Jelajahi lebih lanjut untuk mengetahui lebih banyak tentang apa yang saya lakukan dan bagaimana saya bisa membantu mewujudkan solusi teknologi untuk Anda.');

INSERT INTO about (content) VALUES 
('Halo! Saya, Abdurrahman Hakim Makarim. Mahasiswa aktif Universitas Pembangunan Jaya, Program Studi Informatika. Selama studi saya, saya telah mengembangkan minat yang mendalam dalam teknologi informasi, khususnya dalam bidang pengembangan perangkat lunak dan kecerdasan buatan.<br><br>Dengan latar belakang pendidikan IT, saya memiliki keahlian di bidang penggunaan teknologi, khususnya dalam prompt engineering, yang memungkinkan saya untuk memaksimalkan efisiensi interaksi dengan kecerdasan buatan. Saya selalu berupaya untuk mengintegrasikan solusi teknologi yang inovatif dengan pendekatan yang praktis dan efektif dalam setiap proyek, baik itu dalam pengembangan aplikasi, analisis data, maupun pengelolaan sistem.');

INSERT INTO experiences (title, description, link, image) VALUES
('Sertifikasi Web Development', 'Menyelesaikan kursus pengembangan web di FreeCodeCamp.', 'https://www.freecodecamp.org/certification/abdrhakim/responsive-web-design', 'sertifikat_website.jpg'),
('Sertifikasi Prompt Engineering', 'Menguasai Prompt Engineering dengan ChatGPT melalui Coursera.', 'https://coursera.org/share/cc87ef5dec921fb0a6183149246e1b9b', 'prompt_engineering_coursera_cert.jpg'),
('AI Prompt Engineering Basic', 'Memahami dasar-dasar kecerdasan buatan dan prompt engineering.', 'https://coursera.org/share/febe0087c704810bc9ad2dcbbaa2b262', 'ai_basic_coursera.jpg');

INSERT INTO skills (skill_name, description) VALUES
('Bahasa Inggris B2', 'Kemampuan berbahasa Inggris tingkat B2 (Upper Intermediate) yang membantu saya dalam berkomunikasi di lingkungan profesional.'),
('Prompt Engineering', 'Keahlian dalam mengoptimalkan hasil dari model bahasa besar (LLM) dengan teknik Prompt Engineering.'),
('Web Development', 'Pengembangan web responsif menggunakan HTML, CSS, dan framework modern.');





ALTER TABLE contacts AUTO_INCREMENT = 1;

ALTER TABLE skills AUTO_INCREMENT = 1;

ALTER TABLE homepage AUTO_INCREMENT = 1;

ALTER TABLE experiences AUTO_INCREMENT = 1;

select * from contacts;
select * from skills;

TRUNCATE table skills;
TRUNCATE table experiences;
TRUNCATE table homepage;
TRUNCATE table contacts;

delete from contacts;
delete from skills;
delete from experiences;
delete from homepage;



select * from skills;
delete from skills where id = 6;

select * from homepage;
delete from homepages where id = 2;

select * from experiences;

drop table skills;

delete from experiences;



SET SQL_SAFE_UPDATES = 0;
