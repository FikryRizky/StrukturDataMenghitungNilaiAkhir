#include <iostream>
#include <string>
using namespace std;

int main() {
    string nim, nama;
    float kehadiran, forum, individu, kelompok, uts, uas, project;
    float nilaiAkhir;
    char hurufMutu;

    cout << "===============================" << endl;
    cout << "   MENGHITUNG NILAI AKHIR" << endl;
    cout << "===============================" << endl;

    // Input data mahasiswa
    cout << "NIM             : ";
    getline(cin, nim);
    cout << "Nama            : ";
    getline(cin, nama);
    cout << "Nilai Kehadiran : ";
    cin >> kehadiran;
    cout << "Nilai Forum     : ";
    cin >> forum;
    cout << "Nilai Individu  : ";
    cin >> individu;
    cout << "Nilai Kelompok  : ";
    cin >> kelompok;
    cout << "Nilai UTS       : ";
    cin >> uts;
    cout << "Nilai UAS       : ";
    cin >> uas;
    cout << "Nilai Project   : ";
    cin >> project;

    // Hitung nilai akhir (bisa disesuaikan bobotnya)
    nilaiAkhir = (kehadiran * 0.1) + (forum * 0.1) + (individu * 0.1) +
                 (kelompok * 0.1) + (uts * 0.2) + (uas * 0.2) + (project * 0.2);

    // Menentukan huruf mutu dengan percabangan
    if (nilaiAkhir >= 85)
        hurufMutu = 'A';
    else if (nilaiAkhir >= 75)
        hurufMutu = 'B';
    else if (nilaiAkhir >= 65)
        hurufMutu = 'C';
    else if (nilaiAkhir >= 50)
        hurufMutu = 'D';
    else
        hurufMutu = 'E';

    // Output hasil
    cout << endl;
    cout << "===============================" << endl;
    cout << "[ " << nim << " " << nama << " ]" << endl;
    cout << "Nilai Akhir : " << nilaiAkhir << endl;
    cout << "Huruf Mutu  : " << hurufMutu << endl;
    cout << "===============================" << endl;

    return 0;
}