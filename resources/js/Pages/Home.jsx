import { Link } from '@inertiajs/inertia-react'

export default function Home() {
  return (
    <div className="min-h-screen flex flex-col">
      <header className="border-b px-6 py-4 flex justify-between">
        <h1 className="font-bold">Thrift Contribution System</h1>
        <Link href="/login" className="border px-4 py-2 rounded hover:bg-gray-100">Login</Link>
      </header>

      <main className="flex flex-col lg:flex-row justify-between items-center p-10">
        <div className="max-w-xl space-y-6">
          <h2 className="text-4xl font-bold">Manage Your Thrift Contributions</h2>
          <p className="text-gray-500">Efficient monthly contributions for your group of 12 members.</p>
          <Link href="/login" className="bg-black text-white px-6 py-3 rounded hover:bg-gray-800 inline-flex items-center">
            Get Started →
          </Link>
        </div>
        <div className="space-y-4 mt-10 lg:mt-0">
          <FeatureCard title="Easy Contribution Tracking" desc="Track contributions and payment status in real-time." />
          <FeatureCard title="Automated Reminders" desc="Auto reminders for due contributions." />
          <FeatureCard title="Transparent Fund Distribution" desc="Track who receives what and when." />
        </div>
      </main>
    </div>
  )
}

function FeatureCard({ title, desc }) {
  return (
    <div className="border p-4 rounded shadow-sm">
      <h3 className="font-semibold">{title}</h3>
      <p className="text-sm text-gray-500">{desc}</p>
    </div>
  )
}