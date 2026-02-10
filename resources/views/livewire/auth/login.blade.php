<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
    <div class="w-full max-w-md">
        <flux:card>
            <flux:heading size="xl" class="mb-6">Se connecter</flux:heading>
            
            <form wire:submit="login" class="space-y-6">
                <flux:input 
                    wire:model="email" 
                    label="Email" 
                    type="email" 
                    required 
                    autocomplete="email" 
                />

                <flux:input 
                    wire:model="password" 
                    label="Mot de passe" 
                    type="password" 
                    required 
                />

                <flux:checkbox wire:model="remember" label="Se souvenir de moi" />

                <div class="flex items-center justify-between">
                    <a href="" class="text-sm text-indigo-600 hover:text-indigo-500">
                        Mot de passe oublié ?
                    </a>
                </div>

                <flux:button type="submit" variant="primary" class="w-full">
                    Connexion
                </flux:button>

                <p class="text-center text-sm text-gray-600">
                    Pas de compte ? 
                    <a href="" class="text-indigo-600 hover:text-indigo-500">
                        S'inscrire
                    </a>
                </p>
            </form>
        </flux:card>
    </div>
</div>
