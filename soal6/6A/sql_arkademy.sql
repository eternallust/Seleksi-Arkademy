SELECT nama.name, work.name AS 'work', kategori.salary 
FROM nama,WORK,kategori 
WHERE nama.id_salary = kategori.id AND nama.id_work = work.id;