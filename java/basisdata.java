import java.util.*;

public class LibBookSimple {
    // Jenis keanggotaan
    enum MembershipType { CORPORATE, STUDENT, INDIVIDUAL }

    // Data Anggota
    static class Member {
        String id;
        String name;
        MembershipType type;
        boolean studentVerified;
        List<String> payments = new ArrayList<>();

        Member(String name, MembershipType type) {
            this.id = UUID.randomUUID().toString().substring(0, 6);
            this.name = name;
            this.type = type;
            this.studentVerified = (type != MembershipType.STUDENT); // default: non-student = langsung valid
        }

        @Override
        public String toString() {
            return id + " | " + name + " | " + type +
                   (type == MembershipType.STUDENT ? " (Verified: " + studentVerified + ")" : "") +
                   " | Payments: " + payments;
        }
    }

    // Database anggota
    static Map<String, Member> members = new HashMap<>();

    // Biaya keanggotaan
    static final double CORPORATE_FEE = 200;
    static final double INDIVIDUAL_FEE = 50;

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        while (true) {
            System.out.println("\n=== MENU LIBBOOK ===");
            System.out.println("1. Daftar Anggota");
            System.out.println("2. Lihat Semua Anggota");
            System.out.println("3. Verifikasi Mahasiswa");
            System.out.println("4. Bayar Iuran");
            System.out.println("5. Ubah Jenis Keanggotaan");
            System.out.println("6. Keluar");
            System.out.print("Pilih: ");
            int pilih = sc.nextInt(); sc.nextLine();

            switch (pilih) {
                case 1 -> {
                    System.out.print("Nama: ");
                    String nama = sc.nextLine();
                    System.out.print("Jenis (1=CORPORATE, 2=STUDENT, 3=INDIVIDUAL): ");
                    int t = sc.nextInt(); sc.nextLine();
                    MembershipType type = (t==1) ? MembershipType.CORPORATE :
                                          (t==2) ? MembershipType.STUDENT : MembershipType.INDIVIDUAL;
                    Member m = new Member(nama, type);
                    members.put(m.id, m);
                    System.out.println("Anggota berhasil didaftarkan! ID: " + m.id);
                }
                case 2 -> members.values().forEach(System.out::println);
                case 3 -> {
                    System.out.print("Masukkan ID Anggota: ");
                    String id = sc.nextLine();
                    Member m = members.get(id);
                    if (m != null && m.type == MembershipType.STUDENT) {
                        System.out.print("Masukkan NIM mahasiswa: ");
                        String nim = sc.nextLine();
                        if (nim.length() >= 5) {
                            m.studentVerified = true;
                            System.out.println("Verifikasi sukses!");
                        } else System.out.println("Verifikasi gagal!");
                    } else System.out.println("Bukan mahasiswa atau ID salah!");
                }
                case 4 -> {
                    System.out.print("Masukkan ID Anggota: ");
                    String id = sc.nextLine();
                    Member m = members.get(id);
                    if (m != null) {
                        if (m.type == MembershipType.STUDENT) {
                            System.out.println("Mahasiswa gratis, tidak perlu bayar.");
                        } else {
                            double fee = (m.type == MembershipType.CORPORATE) ? CORPORATE_FEE : INDIVIDUAL_FEE;
                            m.payments.add("Bayar: " + fee);
                            System.out.println("Pembayaran berhasil sebesar " + fee);
                        }
                    } else System.out.println("ID tidak ditemukan!");
                }
                case 5 -> {
                    System.out.print("Masukkan ID Anggota: ");
                    String id = sc.nextLine();
                    Member m = members.get(id);
                    if (m != null) {
                        System.out.print("Jenis baru (1=CORPORATE, 2=STUDENT, 3=INDIVIDUAL): ");
                        int t = sc.nextInt(); sc.nextLine();
                        System.out.print("Justifikasi: ");
                        String just = sc.nextLine();
                        if (just.length() >= 10) {
                            m.type = (t==1) ? MembershipType.CORPORATE :
                                     (t==2) ? MembershipType.STUDENT : MembershipType.INDIVIDUAL;
                            if (m.type == MembershipType.STUDENT) m.studentVerified = false;
                            System.out.println("Jenis keanggotaan berhasil diubah!");
                        } else System.out.println("Justifikasi terlalu singkat!");
                    } else System.out.println("ID tidak ditemukan!");
                }
                case 6 -> {
                    System.out.println("Keluar...");
                    return;
                }
                default -> System.out.println("Pilihan salah!");
            }
        }
    }
}
