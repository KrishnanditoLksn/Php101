-- Active: 1711861680364@@127.0.0.1@3306@test
SELECT * FROM `NILAI_MAHASISWA`;

SELECT *
FROM mahasiswa;

SELECT *
FROM `NILAI_MAHASISWA`;

SELECT mahasiswa.nama , mahasiswa.nim , NILAI_MAHASISWA.statistika
FROM mahasiswa
INNER JOIN `NILAI_MAHASISWA`
ON NILAI_MAHASISWA.nilai_id = mahasiswa.id;

INSERT INTO `NILAI_MAHASISWA` VALUES (1,"A","c");
INSERT INTO `NILAI_MAHASISWA` VALUES (2,"B","c");