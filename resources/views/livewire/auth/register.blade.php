<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
    <div class="w-full max-w-md">
        <flux:card>
            <flux:heading size="xl" class="mb-6">S'inscrire</flux:heading>
            
            <form wire:submit="register" class="space-y-6">
                <flux:input 
                    wire:model="name" 
                    label="Nom complet" 
                    type="text" 
                    required 
                    autocomplete="name" 
                />

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
                    autocomplete="new-password"
                />

                <flux:input 
                    wire:model="password_confirmation" 
                    label="Confirmer le mot de passe" 
                    type="password" 
                    required 
                    autocomplete="new-password"
                />

                <flux:button type="submit" variant="primary" class="w-full">
                    S'inscrire
                </flux:button>

                <p class="text-center text-sm text-gray-600">
                    Vous avez déjà un compte ? 
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500">
                        Se connecter
                    </a>
                </p>
            </form>
        </flux:card>
    </div>
</div>