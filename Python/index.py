# ==============================
# Program Menghitung Nilai Akhir
# ==============================

# Fungsi untuk menghitung nilai akhir
def hitung_nilai_akhir(kehadiran, forum, tugas_individu, tugas_kelompok, uts, uas, project):
    # Rata-rata dari semua komponen nilai
    nilai_akhir = (kehadiran + forum + tugas_individu + tugas_kelompok + uts + uas + project) / 7
    return nilai_akhir

# Fungsi untuk menentukan huruf mutu
def huruf_mutu(nilai):
    if nilai >= 85:
        return "A"
    elif nilai >= 75:
        return "B"
    elif nilai >= 65:
        return "C"
    elif nilai >= 50:
        return "D"
    else:
        return "E"

# ==============================
# Input Data
# ==============================
nim = input("Masukkan NIM: ")
nama = input("Masukkan Nama: ")

kehadiran = float(input("Masukkan Nilai Kehadiran: "))
forum = float(input("Masukkan Nilai Forum: "))
tugas_individu = float(input("Masukkan Nilai Tugas Individu: "))
tugas_kelompok = float(input("Masukkan Nilai Tugas Kelompok: "))
uts = float(input("Masukkan Nilai UTS: "))
uas = float(input("Masukkan Nilai UAS: "))
project = float(input("Masukkan Nilai Project: "))

# ==============================
# Proses Perhitungan
# ==============================
nilai_akhir = hitung_nilai_akhir(kehadiran, forum, tugas_individu, tugas_kelompok, uts, uas, project)
mutu = huruf_mutu(nilai_akhir)

# ==============================
# Output Hasil
# ==============================
print("\n==============================")
print("     MENGHITUNG NILAI AKHIR   ")
print("==============================")
print(f"NIM   : {nim}")
print(f"NAMA  : {nama}")
print(f"NILAI AKHIR : {nilai_akhir:.2f}")
print(f"HURUF MUTU  : {mutu}")
print("==============================")