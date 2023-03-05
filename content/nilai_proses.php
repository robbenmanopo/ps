//script final
select ((avg(n_harian) * 2)+ avg(n_uts) + avg(n_uas)) / 4
from data_nilai where id_mapel=1 and id_siswa=3

//script persiapan
SELECT
id_siswa,
id_mapel,
avg(n_harian) rata_harian,
avg(n_uts) rata_uts,
avg(n_uas) rata_uas
from data_nilai where id_mapel=1 and id_siswa=3

//script awal
Select * from data_nilai where id_mapel=1 and id_siswa=3