SELECT m.mhs_nama, mn.nilai 
FROM `tb_mahasiswa_nilai` mn 
left JOIN tb_mahasiswa m on mn.mhs_id = m.mhs_id 
left JOIN tb_matakuliah mk on mn.mk_id = mk.mk_id 
WHERE mk.mk_kode ='MK303' 
ORDER BY mn.nilai DESC LIMIT 1