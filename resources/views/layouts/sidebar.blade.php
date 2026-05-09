<div class="p-5">

    <h2 class="text-xl font-bold mb-6 text-gray-800 dark:text-white"
        x-show="$parent.open">
        My App
    </h2>

    <ul class="space-y-3 text-gray-700 dark:text-gray-200">

        <li>
            <a href="/dashboard" class="block hover:text-blue-500">
                📊 <span x-show="$parent.open">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="/tasks" class="block hover:text-blue-500">
                📝 <span x-show="$parent.open">Tasks</span>
            </a>
        </li>

        <li>
            <a href="/profile" class="block hover:text-blue-500">
                👤 <span x-show="$parent.open">Profile</span>
            </a>
        </li>

        <li>
            <a href="/produits" class="block hover:text-blue-500">
                🛒 <span x-show="$parent.open">Produits</span>
            </a>
        </li>

        <li>
            <a href="/contact" class="block hover:text-blue-500">
                📞 <span x-show="$parent.open">Contact</span>
            </a>
        </li>

        <li>
            <a href="http://localhost:9000"
               target="_blank"
               class="text-red-500">
                📈 <span x-show="$parent.open">SonarQube</span>
            </a>
        </li>

    </ul>

</div>