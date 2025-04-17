<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thrift Contribution System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css') {{-- Assuming you're using Laravel Vite + Tailwind --}}
</head>
<body class="flex min-h-screen flex-col">
  <header class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <div class="container flex h-16 items-center">
      <div class="mr-4 hidden md:flex">
        <a href="/" class="mr-6 flex items-center space-x-2">
          <span class="hidden font-bold sm:inline-block">Thrift Contribution System</span>
        </a>
      </div>
      <div class="flex flex-1 items-center justify-end space-x-4">
        <nav class="flex items-center space-x-2">
          <a href="/login" class="btn btn-outline">Login</a>
        </nav>
      </div>
    </div>
  </header>

  <main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48">
      <div class="container px-4 md:px-6">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 xl:grid-cols-2">
          <div class="flex flex-col justify-center space-y-4">
            <div class="space-y-2">
              <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                Manage Your Thrift Contributions
              </h1>
              <p class="max-w-[600px] text-gray-500 md:text-xl dark:text-gray-400">
                A simple and efficient way to manage monthly contributions for your group of 12 members.
              </p>
            </div>
            <div class="flex flex-col gap-2 min-[400px]:flex-row">
              <a href="/login" class="btn btn-primary gap-1.5">
                Get Started →
              </a>
            </div>
          </div>

          <div class="flex flex-col justify-center space-y-4">
            <div class="grid gap-6">
              <div class="flex items-start gap-4 rounded-lg border p-6 shadow-sm">
                <div>
                  <h3 class="font-semibold">Easy Contribution Tracking</h3>
                  <p class="text-sm text-gray-500 dark:text-gray-400">
                    Track contributions and payment status for all members in real-time.
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4 rounded-lg border p-6 shadow-sm">
                <div>
                  <h3 class="font-semibold">Automated Reminders</h3>
                  <p class="text-sm text-gray-500 dark:text-gray-400">
                    Automatic notifications for upcoming and overdue contributions.
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4 rounded-lg border p-6 shadow-sm">
                <div>
                  <h3 class="font-semibold">Transparent Fund Distribution</h3>
                  <p class="text-sm text-gray-500 dark:text-gray-400">
                    Clear rotation schedule and fund distribution tracking.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">How It Works</h2>
            <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
              Our system simplifies the management of your thrift contribution group.
            </p>
          </div>
        </div>
        <div class="mx-auto grid max-w-5xl items-center gap-6 py-12 lg:grid-cols-3 lg:gap-12">
          <div class="flex flex-col justify-center space-y-4 rounded-lg border bg-background p-6 shadow-sm">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground">
              1
            </div>
            <h3 class="text-xl font-bold">Register Members</h3>
            <p class="text-gray-500 dark:text-gray-400">
              Administrator registers all 12 members with their contact details.
            </p>
          </div>
          <div class="flex flex-col justify-center space-y-4 rounded-lg border bg-background p-6 shadow-sm">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground">
              2
            </div>
            <h3 class="text-xl font-bold">Make Contributions</h3>
            <p class="text-gray-500 dark:text-gray-400">
              Members contribute within the last 7 days of each month.
            </p>
          </div>
          <div class="flex flex-col justify-center space-y-4 rounded-lg border bg-background p-6 shadow-sm">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground">
              3
            </div>
            <h3 class="text-xl font-bold">Receive Funds</h3>
            <p class="text-gray-500 dark:text-gray-400">
              Each month, one member receives the total collected amount based on the rotation schedule.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
    <p class="text-xs text-gray-500 dark:text-gray-400">
      © {{ now()->year }} Thrift Contribution System. All rights reserved.
    </p>
  </footer>
</body>
</html>
