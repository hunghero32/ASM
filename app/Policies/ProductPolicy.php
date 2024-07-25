<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any products.
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the product.
     */
    public function view(User $user, Product $product)
    {
        return true; // Thay đổi theo logic của bạn
    }

    /**
     * Determine whether the user can create products.
     */
    public function create(User $user)
    {
        return $user->role === 'admin'; // Thay đổi theo logic của bạn
    }

    /**
     * Determine whether the user can update the product.
     */
    public function update(User $user, Product $product)
    {
        return $user->role === 'admin'; // Thay đổi theo logic của bạn
    }

    /**
     * Determine whether the user can delete the product.
     */
    public function delete(User $user, Product $product)
    {
        return $user->role === 'admin'; // Thay đổi theo logic của bạn
    }
}
