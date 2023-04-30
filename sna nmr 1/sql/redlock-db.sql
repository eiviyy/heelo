USE Redlock;

CREATE TABLE users (
ID int(15) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (ID),
Nama VARCHAR(250),
Alamat VARCHAR(250),
Jabatan VARCHAR(250)
);

INSERT INTO users (Nama, Alamat, Jabatan) VALUES
('Bobby', 'test', 'test1'),
('Lina', 'halo', 'halo1'),
('Nana', 'bai', 'bai1'),
('Abel', 'testtt', 'testtt1'),
('Angel', 'bla', 'bla1');