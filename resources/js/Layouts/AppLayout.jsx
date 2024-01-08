import Footer from "./Footer";
import Navbar from "./Navbar";

export default function AppLayout({ children }) {
    return (
        <div className="min-h-screen bg-gray-950 text-white">
            <Navbar />
                <main>{children}</main>
            <Footer />
        </div>
    );
}